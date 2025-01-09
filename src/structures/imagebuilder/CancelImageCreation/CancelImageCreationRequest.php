<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CancelImageCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageBuildVersionArn
 * @property string $clientToken
 */
class CancelImageCreationRequest extends Request
{
    /**
     * @param array{
     *     imageBuildVersionArn: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
