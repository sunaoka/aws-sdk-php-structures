<?php

namespace Sunaoka\Aws\Structures\Iot\CreateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamId
 * @property string|null $description
 * @property list<Shapes\StreamFile> $files
 * @property string $roleArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateStreamRequest extends Request
{
    /**
     * @param array{
     *     streamId: string,
     *     description?: string|null,
     *     files: list<Shapes\StreamFile>,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
