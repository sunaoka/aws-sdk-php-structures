<?php

namespace Sunaoka\Aws\Structures\Translate\CreateParallelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\ParallelDataConfig $ParallelDataConfig
 * @property Shapes\EncryptionKey $EncryptionKey
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateParallelDataRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ParallelDataConfig: Shapes\ParallelDataConfig,
     *     EncryptionKey?: Shapes\EncryptionKey,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
