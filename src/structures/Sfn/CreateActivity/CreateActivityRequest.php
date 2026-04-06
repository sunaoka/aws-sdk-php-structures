<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateActivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class CreateActivityRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     tags?: list<Shapes\Tag>|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
