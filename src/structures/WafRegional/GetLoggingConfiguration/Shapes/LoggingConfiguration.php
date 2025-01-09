<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property list<string> $LogDestinationConfigs
 * @property list<FieldToMatch> $RedactedFields
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogDestinationConfigs: list<string>,
     *     RedactedFields?: list<FieldToMatch>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
