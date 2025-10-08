<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupSelectionCriteria
 * @property 'ALLOW'|'SKIP' $EncryptedLogGroupStrategy
 */
class SourceLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     LogGroupSelectionCriteria: string,
     *     EncryptedLogGroupStrategy: 'ALLOW'|'SKIP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
