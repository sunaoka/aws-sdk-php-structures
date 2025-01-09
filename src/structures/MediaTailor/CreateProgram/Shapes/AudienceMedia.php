<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AlternateMedia> $AlternateMedia
 * @property string $Audience
 */
class AudienceMedia extends Shape
{
    /**
     * @param array{
     *     AlternateMedia?: list<AlternateMedia>,
     *     Audience?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
