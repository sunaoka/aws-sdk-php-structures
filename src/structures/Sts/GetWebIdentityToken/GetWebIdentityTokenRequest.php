<?php

namespace Sunaoka\Aws\Structures\Sts\GetWebIdentityToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Audience
 * @property int<60, 3600>|null $DurationSeconds
 * @property string $SigningAlgorithm
 * @property list<Shapes\Tag>|null $Tags
 */
class GetWebIdentityTokenRequest extends Request
{
    /**
     * @param array{
     *     Audience: list<string>,
     *     DurationSeconds?: int<60, 3600>|null,
     *     SigningAlgorithm: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
