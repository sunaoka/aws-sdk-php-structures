<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileArn
 * @property string $ProfileVersion
 * @property string $ProfileName
 * @property string $ProfileDescription
 * @property list<ProfileQuestion> $ProfileQuestions
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $ShareInvitationId
 * @property array<string, string> $Tags
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string,
     *     ProfileVersion?: string,
     *     ProfileName?: string,
     *     ProfileDescription?: string,
     *     ProfileQuestions?: list<ProfileQuestion>,
     *     Owner?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     ShareInvitationId?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
