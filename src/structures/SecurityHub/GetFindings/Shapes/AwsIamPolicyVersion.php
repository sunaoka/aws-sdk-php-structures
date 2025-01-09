<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VersionId
 * @property bool $IsDefaultVersion
 * @property string $CreateDate
 */
class AwsIamPolicyVersion extends Shape
{
    /**
     * @param array{
     *     VersionId?: string,
     *     IsDefaultVersion?: bool,
     *     CreateDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
