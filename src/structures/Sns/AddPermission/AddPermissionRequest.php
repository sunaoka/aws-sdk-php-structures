<?php

namespace Sunaoka\Aws\Structures\Sns\AddPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $Label
 * @property list<string> $AWSAccountId
 * @property list<string> $ActionName
 */
class AddPermissionRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     Label: string,
     *     AWSAccountId: list<string>,
     *     ActionName: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
