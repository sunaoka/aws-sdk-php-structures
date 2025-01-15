<?php

namespace Sunaoka\Aws\Structures\Waf\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property list<string> $LogDestinationConfigs
 * @property list<FieldToMatch>|null $RedactedFields
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogDestinationConfigs: list<string>,
     *     RedactedFields?: list<FieldToMatch>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
