<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $MfaAuthenticated
 * @property string|null $CreationDate
 */
class AwsIamAccessKeySessionContextAttributes extends Shape
{
    /**
     * @param array{
     *     MfaAuthenticated?: bool|null,
     *     CreationDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
