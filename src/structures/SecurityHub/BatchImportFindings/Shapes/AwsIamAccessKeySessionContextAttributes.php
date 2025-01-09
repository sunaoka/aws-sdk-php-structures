<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $MfaAuthenticated
 * @property string $CreationDate
 */
class AwsIamAccessKeySessionContextAttributes extends Shape
{
    /**
     * @param array{
     *     MfaAuthenticated?: bool,
     *     CreationDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
