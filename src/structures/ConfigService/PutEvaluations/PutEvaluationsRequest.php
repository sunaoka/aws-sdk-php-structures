<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Evaluation>|null $Evaluations
 * @property string $ResultToken
 * @property bool|null $TestMode
 */
class PutEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     Evaluations?: list<Shapes\Evaluation>|null,
     *     ResultToken: string,
     *     TestMode?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
