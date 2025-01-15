<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property bool|null $DefaultDomain
 */
class MailDomainSummary extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     DefaultDomain?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
