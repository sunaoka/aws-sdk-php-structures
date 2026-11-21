<?php

namespace Sunaoka\Aws\Structures\Textract\GetBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintArn
 * @property string|null $BlueprintVersion
 */
class GetBlueprintRequest extends Request
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
