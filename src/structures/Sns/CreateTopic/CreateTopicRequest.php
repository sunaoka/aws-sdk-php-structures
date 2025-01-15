<?php

namespace Sunaoka\Aws\Structures\Sns\CreateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string>|null $Attributes
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DataProtectionPolicy
 */
class CreateTopicRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Attributes?: array<string, string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DataProtectionPolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
