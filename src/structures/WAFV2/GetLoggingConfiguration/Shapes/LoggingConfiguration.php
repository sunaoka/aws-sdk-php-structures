<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property list<string> $LogDestinationConfigs
 * @property list<FieldToMatch>|null $RedactedFields
 * @property bool|null $ManagedByFirewallManager
 * @property LoggingFilter|null $LoggingFilter
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogDestinationConfigs: list<string>,
     *     RedactedFields?: list<FieldToMatch>|null,
     *     ManagedByFirewallManager?: bool|null,
     *     LoggingFilter?: LoggingFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
