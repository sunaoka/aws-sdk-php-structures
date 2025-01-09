<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteImageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property int $Version
 * @property string $Alias
 */
class DeleteImageVersionRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     Version?: int,
     *     Alias?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
