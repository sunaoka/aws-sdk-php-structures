<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamId
 * @property string $description
 * @property list<Shapes\StreamFile> $files
 * @property string $roleArn
 */
class UpdateStreamRequest extends Request
{
    /**
     * @param array{
     *     streamId: string,
     *     description?: string,
     *     files?: list<Shapes\StreamFile>,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
