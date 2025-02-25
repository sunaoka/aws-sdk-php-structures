<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAccountAuditConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property array<'CERT_AGE_THRESHOLD_IN_DAYS'|'CERT_EXPIRATION_THRESHOLD_IN_DAYS', string>|null $configuration
 */
class AuditCheckConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     configuration?: array<'CERT_AGE_THRESHOLD_IN_DAYS'|'CERT_EXPIRATION_THRESHOLD_IN_DAYS', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
