<?php
/**
 * WordPress 기본 설정 파일
 * CloudPress 자동 생성 — 직접 수정하지 마세요
 * 데이터베이스: SQLite (_db/wordpress.db — GitHub 레포 저장)
 */

// ── SQLite 데이터베이스 설정 ──────────────────────────────────────────────────
// D1(Cloudflare) 대신 GitHub 레포 내 SQLite .db 파일 사용
// db.php 드롭인(wp-content/db.php)이 SQLite 연결을 처리합니다.
define( 'DB_NAME',     '67d0de7f-e9a8-45d1-a450-0fd32bd3e311_wp' );
define( 'DB_USER',     'cloudpress' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ── SQLite 플러그인 설정 ──────────────────────────────────────────────────────
// wp-content/db.php (SQLite Database Integration 드롭인)
define( 'SQLITE_DB_DIR',  ABSPATH . '_db/' );   // GitHub 레포 내 _db/ 폴더
define( 'SQLITE_DB_FILE', 'wordpress.db' );      // .db 확장자 (D1 금지)

// ── 인증 키 & 솔트 ──────────────────────────────────────────────────────────
define( 'AUTH_KEY',         '4ma7gu0uny9tag1p3bdz4dwdcitfmehdcgzvekduqszob7mj1lgp7bda9hipjila' );
define( 'SECURE_AUTH_KEY',  '7scbiaxbwb6h4j0jsrhqlrvgkaos2i5ictqpd3bvtfs05kcqyg4qfr5scq68ux08' );
define( 'LOGGED_IN_KEY',    '228uxfkdfduac1lp8xvl7rc7m26uo1gvgh9okeni7uko20m29o98yxm0s2re949o' );
define( 'NONCE_KEY',        '2y6dtaotbvfk8ag887xdn1yjwobxqeorqc73nnpgd6i0rfhp3kvhkg6ntwp2hgyy' );
define( 'AUTH_SALT',        '8qsfua53nqjvvb31tijr27uzzeyv4sdwtqbdz0k4sut2isd5vh1quk2j3z4oos06' );
define( 'SECURE_AUTH_SALT', 'ymacea5q7zem13z09dyu3ujv57cqvaq2f0bo25xnvr0tlog0storfwgc8xt3l2cx' );
define( 'LOGGED_IN_SALT',   'k41y8t7mv1lwn9c2dw3fvxxbi5zjbetyznkepissnody7rm3vgyxe9m5hdb2le13' );
define( 'NONCE_SALT',       'b91cfjmrppo6kkk67i11pxfykqfx8fk6k4f4sdq9ne5mzjstsv4lrm9lsrgijr0g' );

// ── CloudPress 전용 설정 ─────────────────────────────────────────────────────
define( 'CP_SITE_ID', getenv('CP_SITE_ID') ?: '67d0de7f-e9a8-45d1-a450-0fd32bd3e311' );
define( 'CP_GITHUB_OWNER',  getenv('CP_GITHUB_OWNER')  ?: '' );
define( 'CP_GITHUB_REPO',   getenv('CP_GITHUB_REPO')   ?: '' );
define( 'CP_GITHUB_TOKEN',  getenv('CP_GITHUB_TOKEN')  ?: '' );

// ── 테이블 접두사 ────────────────────────────────────────────────────────────
$table_prefix = 'wp_';

// ── 절대 경로 ───────────────────────────────────────────────────────────────
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// ── 디버그 설정 ─────────────────────────────────────────────────────────────
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );

// ── 보안 설정 ───────────────────────────────────────────────────────────────
define( 'DISALLOW_FILE_EDIT', true );

// ── 업로드 경로 ──────────────────────────────────────────────────────────────
define( 'UPLOADS', 'wp-content/uploads' );

// ── WordPress 설정 로드 ──────────────────────────────────────────────────────
require_once ABSPATH . 'wp-settings.php';
