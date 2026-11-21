<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroupSelectionCriteria
 * @property string|null $DataSourceSelectionCriteria
 * @property 'ALLOW'|'SKIP' $EncryptedLogGroupStrategy
 * @property 'ENABLED'|'DISABLED'|null $CentralizeWithDataProtection
 */
class SourceLogsConfiguration extends Shape
{
    /**
     * @param array{
     *     LogGroupSelectionCriteria?: string|null,
     *     DataSourceSelectionCriteria?: string|null,
     *     EncryptedLogGroupStrategy: 'ALLOW'|'SKIP',
     *     CentralizeWithDataProtection?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
