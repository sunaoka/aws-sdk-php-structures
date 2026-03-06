<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HISTORY_AND_PHYSICAL'|'GIRPP'|'DAP'|'SIRP'|'BIRP'|'BEHAVIORAL_SOAP'|null $templateType
 */
class CustomTemplateResponse extends Shape
{
    /**
     * @param array{templateType?: 'HISTORY_AND_PHYSICAL'|'GIRPP'|'DAP'|'SIRP'|'BIRP'|'BEHAVIORAL_SOAP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
