<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateHybridAD;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretArn
 * @property string $AssessmentId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHybridADRequest extends Request
{
    /**
     * @param array{
     *     SecretArn: string,
     *     AssessmentId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
