<?php

namespace Sunaoka\Aws\Structures\Textract\CreateBlueprintVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintArn
 * @property string|null $ClientRequestToken
 */
class CreateBlueprintVersionRequest extends Request
{
    /**
     * @param array{
     *     BlueprintArn: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
