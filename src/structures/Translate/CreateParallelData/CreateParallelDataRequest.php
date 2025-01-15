<?php

namespace Sunaoka\Aws\Structures\Translate\CreateParallelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ParallelDataConfig $ParallelDataConfig
 * @property Shapes\EncryptionKey|null $EncryptionKey
 * @property string $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateParallelDataRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ParallelDataConfig: Shapes\ParallelDataConfig,
     *     EncryptionKey?: Shapes\EncryptionKey|null,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
