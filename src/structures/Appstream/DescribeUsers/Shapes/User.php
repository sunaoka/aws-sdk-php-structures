<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $UserName
 * @property bool $Enabled
 * @property string $Status
 * @property string $FirstName
 * @property string $LastName
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 */
class User extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     UserName?: string,
     *     Enabled?: bool,
     *     Status?: string,
     *     FirstName?: string,
     *     LastName?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
