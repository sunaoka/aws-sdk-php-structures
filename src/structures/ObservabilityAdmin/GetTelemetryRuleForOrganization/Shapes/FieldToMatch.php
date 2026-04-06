<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SingleHeader|null $SingleHeader
 * @property string|null $UriPath
 * @property string|null $QueryString
 * @property string|null $Method
 */
class FieldToMatch extends Shape
{
    /**
     * @param array{
     *     SingleHeader?: SingleHeader|null,
     *     UriPath?: string|null,
     *     QueryString?: string|null,
     *     Method?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
