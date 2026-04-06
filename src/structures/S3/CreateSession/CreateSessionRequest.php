<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ReadOnly'|'ReadWrite'|null $SessionMode
 * @property string $Bucket
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     SessionMode?: 'ReadOnly'|'ReadWrite'|null,
     *     Bucket: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
