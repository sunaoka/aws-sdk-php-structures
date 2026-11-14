<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ListenerProperty> $ListenerProperties
 * @property string|null $CertificateArn
 * @property string|null $DomainName
 */
class ProxySettings extends Shape
{
    /**
     * @param array{
     *     ListenerProperties: list<ListenerProperty>,
     *     CertificateArn?: string|null,
     *     DomainName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
