<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property list<string>|null $Equals
 * @property list<string>|null $StartsWith
 * @property list<string>|null $EndsWith
 * @property list<string>|null $NotEquals
 * @property list<string>|null $NotStartsWith
 * @property list<string>|null $NotEndsWith
 */
class AdvancedFieldSelector extends Shape
{
    /**
     * @param array{
     *     Field: string,
     *     Equals?: list<string>|null,
     *     StartsWith?: list<string>|null,
     *     EndsWith?: list<string>|null,
     *     NotEquals?: list<string>|null,
     *     NotStartsWith?: list<string>|null,
     *     NotEndsWith?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
