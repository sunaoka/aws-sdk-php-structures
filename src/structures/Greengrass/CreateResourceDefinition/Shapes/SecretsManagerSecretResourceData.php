<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property list<string> $AdditionalStagingLabelsToDownload
 */
class SecretsManagerSecretResourceData extends Shape
{
    /**
     * @param array{
     *     ARN?: string,
     *     AdditionalStagingLabelsToDownload?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
