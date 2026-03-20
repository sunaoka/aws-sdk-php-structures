<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroupSelectionCriteria
 * @property string|null $DataSourceSelectionCriteria
 * @property 'ALLOW'|'SKIP' $EncryptedLogGroupStrategy
 */
class SourceLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     LogGroupSelectionCriteria?: string|null,
     *     DataSourceSelectionCriteria?: string|null,
     *     EncryptedLogGroupStrategy: 'ALLOW'|'SKIP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
