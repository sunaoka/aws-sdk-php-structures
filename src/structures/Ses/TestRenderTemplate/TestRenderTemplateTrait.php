<?php

namespace Sunaoka\Aws\Structures\Ses\TestRenderTemplate;

trait TestRenderTemplateTrait
{
    /**
     * @param TestRenderTemplateRequest $args
     * @return TestRenderTemplateResponse
     */
    public function testRenderTemplate(TestRenderTemplateRequest $args)
    {
        $result = parent::testRenderTemplate($args->toArray());
        return new TestRenderTemplateResponse($result->toArray());
    }
}
