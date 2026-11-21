<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'arch'|'collector'|'dev_dependency'|'distro'|'epoch'|'go_toolchain'|'hardened'|'private'|'rust_toolchain'|'scope'|'skip_chromium_download'|'source'|'stream'|'transitive_dependency'|'unresolved'|'vendor' $key
 * @property string|null $value
 */
class PurlQualifierFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     key: 'arch'|'collector'|'dev_dependency'|'distro'|'epoch'|'go_toolchain'|'hardened'|'private'|'rust_toolchain'|'scope'|'skip_chromium_download'|'source'|'stream'|'transitive_dependency'|'unresolved'|'vendor',
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
