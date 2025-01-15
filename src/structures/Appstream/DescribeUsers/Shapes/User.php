<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $UserName
 * @property bool|null $Enabled
 * @property string|null $Status
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 */
class User extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     UserName?: string|null,
     *     Enabled?: bool|null,
     *     Status?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
