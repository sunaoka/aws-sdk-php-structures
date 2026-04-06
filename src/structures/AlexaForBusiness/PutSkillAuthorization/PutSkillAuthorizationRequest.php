<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutSkillAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $AuthorizationResult
 * @property string $SkillId
 * @property string|null $RoomArn
 */
class PutSkillAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     AuthorizationResult: array<string, string>,
     *     SkillId: string,
     *     RoomArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
