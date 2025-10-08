<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateChatResponseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $displayName
 * @property string|null $clientToken
 * @property array<'ALL', Shapes\ResponseConfiguration> $responseConfigurations
 * @property list<Shapes\Tag>|null $tags
 */
class CreateChatResponseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     displayName: string,
     *     clientToken?: string|null,
     *     responseConfigurations: array<'ALL', Shapes\ResponseConfiguration>,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
