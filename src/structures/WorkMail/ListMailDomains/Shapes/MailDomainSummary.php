<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property bool $DefaultDomain
 */
class MailDomainSummary extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     DefaultDomain?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
