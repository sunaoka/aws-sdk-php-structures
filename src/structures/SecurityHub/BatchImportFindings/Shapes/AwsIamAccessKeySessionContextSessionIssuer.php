<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $PrincipalId
 * @property string|null $Arn
 * @property string|null $AccountId
 * @property string|null $UserName
 */
class AwsIamAccessKeySessionContextSessionIssuer extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     PrincipalId?: string|null,
     *     Arn?: string|null,
     *     AccountId?: string|null,
     *     UserName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
