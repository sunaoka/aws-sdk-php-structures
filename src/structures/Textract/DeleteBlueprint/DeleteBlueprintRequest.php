<?php

namespace Sunaoka\Aws\Structures\Textract\DeleteBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintArn
 * @property string|null $BlueprintVersion
 */
class DeleteBlueprintRequest extends Request
{
    /**
     * @param array{
     *     BlueprintArn: string,
     *     BlueprintVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
