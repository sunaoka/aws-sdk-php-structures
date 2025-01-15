<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ARN
 * @property list<string>|null $AdditionalStagingLabelsToDownload
 */
class SecretsManagerSecretResourceData extends Shape
{
    /**
     * @param array{
     *     ARN?: string|null,
     *     AdditionalStagingLabelsToDownload?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
