<?php

namespace Sunaoka\Aws\Structures\Textract\CreateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $BlueprintName
 * @property string $Schema
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property array<string, string>|null $Tags
 */
class CreateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     BlueprintName: string,
     *     Schema: string,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
