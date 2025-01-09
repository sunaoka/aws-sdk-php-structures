<?php

namespace Sunaoka\Aws\Structures\Sns\CreateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string> $Attributes
 * @property list<Shapes\Tag> $Tags
 * @property string $DataProtectionPolicy
 */
class CreateTopicRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Attributes?: array<string, string>,
     *     Tags?: list<Shapes\Tag>,
     *     DataProtectionPolicy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
