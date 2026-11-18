<?php

namespace Sunaoka\Aws\Structures\mgn\StartRemoteSourceActionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $remoteSourceActionArns
 * @property string $connectorArn
 * @property list<string> $sourceServerArns
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $accountID
 */
class StartRemoteSourceActionJobRequest extends Request
{
    /**
     * @param array{
     *     remoteSourceActionArns: list<string>,
     *     connectorArn: string,
     *     sourceServerArns: list<string>,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
