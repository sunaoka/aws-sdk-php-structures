<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdatePatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARCH'|'ADVISORY_ID'|'BUGZILLA_ID'|'PATCH_SET'|'PRODUCT'|'PRODUCT_FAMILY'|'CLASSIFICATION'|'CVE_ID'|'EPOCH'|'MSRC_SEVERITY'|'NAME'|'PATCH_ID'|'SECTION'|'PRIORITY'|'REPOSITORY'|'RELEASE'|'SEVERITY'|'SECURITY'|'VERSION' $Key
 * @property list<string> $Values
 */
class PatchFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'ARCH'|'ADVISORY_ID'|'BUGZILLA_ID'|'PATCH_SET'|'PRODUCT'|'PRODUCT_FAMILY'|'CLASSIFICATION'|'CVE_ID'|'EPOCH'|'MSRC_SEVERITY'|'NAME'|'PATCH_ID'|'SECTION'|'PRIORITY'|'REPOSITORY'|'RELEASE'|'SEVERITY'|'SECURITY'|'VERSION',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
