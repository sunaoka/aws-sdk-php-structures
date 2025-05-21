<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateMacSystemIntegrityProtectionModificationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|null $AppleInternal
 * @property 'enabled'|'disabled'|null $BaseSystem
 * @property 'enabled'|'disabled'|null $DebuggingRestrictions
 * @property 'enabled'|'disabled'|null $DTraceRestrictions
 * @property 'enabled'|'disabled'|null $FilesystemProtections
 * @property 'enabled'|'disabled'|null $KextSigning
 * @property 'enabled'|'disabled'|null $NvramProtections
 * @property 'enabled'|'disabled'|null $Status
 */
class MacSystemIntegrityProtectionConfiguration extends Shape
{
    /**
     * @param array{
     *     AppleInternal?: 'enabled'|'disabled'|null,
     *     BaseSystem?: 'enabled'|'disabled'|null,
     *     DebuggingRestrictions?: 'enabled'|'disabled'|null,
     *     DTraceRestrictions?: 'enabled'|'disabled'|null,
     *     FilesystemProtections?: 'enabled'|'disabled'|null,
     *     KextSigning?: 'enabled'|'disabled'|null,
     *     NvramProtections?: 'enabled'|'disabled'|null,
     *     Status?: 'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
