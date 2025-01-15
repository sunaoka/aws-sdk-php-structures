<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileArn
 * @property string|null $ProfileVersion
 * @property string|null $ProfileName
 * @property string|null $ProfileDescription
 * @property list<ProfileQuestion>|null $ProfileQuestions
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $ShareInvitationId
 * @property array<string, string>|null $Tags
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string|null,
     *     ProfileVersion?: string|null,
     *     ProfileName?: string|null,
     *     ProfileDescription?: string|null,
     *     ProfileQuestions?: list<ProfileQuestion>|null,
     *     Owner?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ShareInvitationId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
