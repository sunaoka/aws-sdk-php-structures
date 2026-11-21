<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintArn
 * @property string|null $Schema
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class UpdateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     BlueprintArn: string,
     *     Schema?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
