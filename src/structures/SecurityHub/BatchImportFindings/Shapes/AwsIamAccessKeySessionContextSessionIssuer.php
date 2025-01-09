<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $PrincipalId
 * @property string $Arn
 * @property string $AccountId
 * @property string $UserName
 */
class AwsIamAccessKeySessionContextSessionIssuer extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     PrincipalId?: string,
     *     Arn?: string,
     *     AccountId?: string,
     *     UserName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
