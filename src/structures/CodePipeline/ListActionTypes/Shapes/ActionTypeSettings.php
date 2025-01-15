<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $thirdPartyConfigurationUrl
 * @property string|null $entityUrlTemplate
 * @property string|null $executionUrlTemplate
 * @property string|null $revisionUrlTemplate
 */
class ActionTypeSettings extends Shape
{
    /**
     * @param array{
     *     thirdPartyConfigurationUrl?: string|null,
     *     entityUrlTemplate?: string|null,
     *     executionUrlTemplate?: string|null,
     *     revisionUrlTemplate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
