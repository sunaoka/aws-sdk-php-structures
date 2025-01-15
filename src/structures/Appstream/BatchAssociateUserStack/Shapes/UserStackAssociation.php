<?php

namespace Sunaoka\Aws\Structures\Appstream\BatchAssociateUserStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackName
 * @property string $UserName
 * @property 'API'|'SAML'|'USERPOOL'|'AWS_AD' $AuthenticationType
 * @property bool|null $SendEmailNotification
 */
class UserStackAssociation extends Shape
{
    /**
     * @param array{
     *     StackName: string,
     *     UserName: string,
     *     AuthenticationType: 'API'|'SAML'|'USERPOOL'|'AWS_AD',
     *     SendEmailNotification?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
