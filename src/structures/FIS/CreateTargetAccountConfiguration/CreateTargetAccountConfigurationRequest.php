<?php

namespace Sunaoka\Aws\Structures\FIS\CreateTargetAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $experimentTemplateId
 * @property string $accountId
 * @property string $roleArn
 * @property string $description
 */
class CreateTargetAccountConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     experimentTemplateId: string,
     *     accountId: string,
     *     roleArn: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
