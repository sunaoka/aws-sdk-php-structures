<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateIdentifier
 * @property string $updateToken
 * @property string|null $templateDescription
 * @property list<Shapes\RuleReference>|null $associatedRuleList
 * @property bool $isPublished
 * @property string|null $clientToken
 */
class UpdateTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateIdentifier: string,
     *     updateToken: string,
     *     templateDescription?: string|null,
     *     associatedRuleList?: list<Shapes\RuleReference>|null,
     *     isPublished: bool,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
