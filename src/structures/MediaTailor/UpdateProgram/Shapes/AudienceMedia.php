<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Audience
 * @property list<AlternateMedia>|null $AlternateMedia
 */
class AudienceMedia extends Shape
{
    /**
     * @param array{
     *     Audience?: string|null,
     *     AlternateMedia?: list<AlternateMedia>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
