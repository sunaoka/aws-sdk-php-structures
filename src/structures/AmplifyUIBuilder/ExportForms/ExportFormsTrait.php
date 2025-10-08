<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms;

trait ExportFormsTrait
{
    /**
     * @param ExportFormsRequest $args
     * @return ExportFormsResponse
     */
    public function exportForms(ExportFormsRequest $args)
    {
        $result = parent::exportForms($args->toArray());
        return new ExportFormsResponse($result->toArray());
    }
}
