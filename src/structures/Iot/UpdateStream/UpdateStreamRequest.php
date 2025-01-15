<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamId
 * @property string|null $description
 * @property list<Shapes\StreamFile>|null $files
 * @property string|null $roleArn
 */
class UpdateStreamRequest extends Request
{
    /**
     * @param array{
     *     streamId: string,
     *     description?: string|null,
     *     files?: list<Shapes\StreamFile>|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
