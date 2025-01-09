<?php

namespace Sunaoka\Aws\Structures\Sqs\AddPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $Label
 * @property list<string> $AWSAccountIds
 * @property list<string> $Actions
 */
class AddPermissionRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     Label: string,
     *     AWSAccountIds: list<string>,
     *     Actions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
