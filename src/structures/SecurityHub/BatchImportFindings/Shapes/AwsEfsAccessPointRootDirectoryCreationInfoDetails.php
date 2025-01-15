<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerGid
 * @property string|null $OwnerUid
 * @property string|null $Permissions
 */
class AwsEfsAccessPointRootDirectoryCreationInfoDetails extends Shape
{
    /**
     * @param array{
     *     OwnerGid?: string|null,
     *     OwnerUid?: string|null,
     *     Permissions?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
