<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VersionId
 * @property bool|null $IsDefaultVersion
 * @property string|null $CreateDate
 */
class AwsIamPolicyVersion extends Shape
{
    /**
     * @param array{
     *     VersionId?: string|null,
     *     IsDefaultVersion?: bool|null,
     *     CreateDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
